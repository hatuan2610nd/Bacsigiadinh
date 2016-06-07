package com.mta.th10.bacsigiadinh.fragments.sub;

import java.util.ArrayList;
import java.util.List;

import com.mta.th10.bacsigiadinh.MainActivity;
import com.mta.th10.bacsigiadinh.R;
import com.mta.th10.bacsigiadinh.adapters.GroupItemAdapter;
import com.mta.th10.bacsigiadinh.db.BenhDB;
import com.mta.th10.bacsigiadinh.db.ThuocDB;

import android.gesture.GestureLibraries;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.AdapterView.OnItemClickListener;
import mta.th10.bacsigiadinh.interfaces.IGroupItem;
import mta.th10.bacsigiadinh.interfaces.ITitleFragment;
import mta.th10.bacsigiadinh.models.Benh;
import mta.th10.bacsigiadinh.models.Thuoc;

public class DanhSachFavFragment extends Fragment implements OnItemClickListener, ITitleFragment {
	GroupItemAdapter adapter;
	List<IGroupItem> list;

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		list = new ArrayList<IGroupItem>();
		View view = inflater.inflate(R.layout.fragment_danhsach_fav, null);
		ListView lv = (ListView) view.findViewById(R.id.listview_danhsach_fav);
		adapter = new GroupItemAdapter(getContext(), list);
		lv.setAdapter(adapter);
		lv.setOnItemClickListener(this);

		MainActivity.Current.updateTitle(this);
		getFavorited();
		return view;
	}

	private List<IGroupItem> getFavorited() {

		getActivity().runOnUiThread(new Runnable() {
			@Override
			public void run() {

				List<Benh> bs = (new BenhDB()).getDanhSachFav();
				List<Thuoc> ts = (new ThuocDB()).getListThuocFav();

				for (Benh b : bs)
					list.add(b);
				for (Thuoc t : ts)
					list.add(t);

				adapter.notifyDataSetChanged();
			}
		});

		return list;
	}

	@Override
	public String getTitle() {
		return "Note";
	}

	@Override
	public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
		IGroupItem item = list.get(position);
		switch (item.getType()) {
		case Benh:
			MainActivity.Current.showFragment(new ChiTietBenhFragment((Benh) item));
			break;
		case Thuoc:
			MainActivity.Current.showFragment(new ChiTietThuocFragment((Thuoc) item));
			break;
		default:
			break;
		}
	}

}