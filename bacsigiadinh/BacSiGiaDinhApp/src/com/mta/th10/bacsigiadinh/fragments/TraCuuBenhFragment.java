package com.mta.th10.bacsigiadinh.fragments;

import java.util.ArrayList;
import java.util.List;

import com.mta.th10.bacsigiadinh.MainActivity;
import com.mta.th10.bacsigiadinh.R;
import com.mta.th10.bacsigiadinh.adapters.GroupItemAdapter;
import com.mta.th10.bacsigiadinh.db.BenhDB;
import com.mta.th10.bacsigiadinh.fragments.sub.DanhSachBenhFragment;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import mta.th10.bacsigiadinh.interfaces.IGroupItem;
import mta.th10.bacsigiadinh.interfaces.ITitleFragment;
import mta.th10.bacsigiadinh.models.NhomBenh;
import android.widget.ListView;

public class TraCuuBenhFragment extends Fragment implements OnItemClickListener,ITitleFragment {
	private List<NhomBenh> listNhomBenh;
	private BenhDB db = new BenhDB();
	public TraCuuBenhFragment() {
		// Lấy danh sách nhóm bệnh trong csdl ra
		listNhomBenh = db.getAllNhomBenh();
	}

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View v = inflater.inflate(R.layout.fragment_main_tracuubenh, container, false);

		ListView lv = (ListView) v.findViewById(R.id.listview_nhombenh);
		GroupItemAdapter adapter = new GroupItemAdapter(getContext(), convertList(listNhomBenh));
		lv.setAdapter(adapter);
		lv.setOnItemClickListener(this);
		return v;
	}

	private List<IGroupItem> convertList(List<NhomBenh> l) {
		List<IGroupItem> list = new ArrayList<IGroupItem>();
		for (NhomBenh b : l)
			list.add(b);
		return list;
	}

	@Override
	public void onItemClick(AdapterView<?> arg0, View arg1, int pos, long arg3) {
		// Chuyển sang danh sách bệnh thuộc nhóm đấy
		NhomBenh nhom = listNhomBenh.get(pos);
		DanhSachBenhFragment f = new DanhSachBenhFragment(nhom);
		MainActivity.Current.showFragment( f);
	}

	@Override
	public String getTitle() {
		return "Tra cứu bệnh";
	}
}
