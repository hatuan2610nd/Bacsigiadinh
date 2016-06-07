package com.mta.th10.bacsigiadinh.fragments.sub;

import java.util.ArrayList;
import java.util.List;

import com.mta.th10.bacsigiadinh.MainActivity;
import com.mta.th10.bacsigiadinh.R;
import com.mta.th10.bacsigiadinh.adapters.GroupItemAdapter;
import com.mta.th10.bacsigiadinh.db.BenhDB;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import mta.th10.bacsigiadinh.interfaces.IGroupItem;
import mta.th10.bacsigiadinh.interfaces.ITitleFragment;
import mta.th10.bacsigiadinh.models.Benh;
import mta.th10.bacsigiadinh.models.NhomBenh;
import android.widget.ListView;

public class DanhSachBenhFragment extends Fragment implements OnItemClickListener, ITitleFragment {
	private NhomBenh nhomBenh;
	private List<Benh> listBenh;
	private BenhDB db = new BenhDB();

	public DanhSachBenhFragment(NhomBenh nhomBenh) {
		// Lấy danh sách bệnh thuộc nhóm đấy ra
		listBenh = db.getDanhSachBenh(nhomBenh);
		this.nhomBenh = nhomBenh;
	}

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View view = inflater.inflate(R.layout.fragment_danhsachbenh, null);
		ListView lv = (ListView) view.findViewById(R.id.listview_danhsachbenh);
		GroupItemAdapter adapter = new GroupItemAdapter(getContext(), convert());
		lv.setAdapter(adapter);
		lv.setOnItemClickListener(this);
		MainActivity.Current.updateTitle(this);return view;
	}

	private List<IGroupItem> convert() {
		List<IGroupItem> l = new ArrayList<IGroupItem>();
		for (Benh b : listBenh)
			l.add(b);
		return l;
	}

	@Override
	public void onItemClick(AdapterView<?> arg0, View arg1, int pos, long arg3) {
		// Chuyển sang trang chi tiết
		Benh b = listBenh.get(pos);
		ChiTietBenhFragment f = new ChiTietBenhFragment(b);
		MainActivity.Current.showFragment(f);
	}

	@Override
	public String getTitle() {
		return nhomBenh.getTen();
	}
}
